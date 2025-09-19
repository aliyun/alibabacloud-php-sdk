<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class SetImageSensitiveFileStatusRequest extends Model
{
    /**
     * @var int[]
     */
    public $idList;

    /**
     * @var string
     */
    public $imageUuids;

    /**
     * @var string[]
     */
    public $scanRange;

    /**
     * @var string
     */
    public $sensitiveFileKey;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'idList' => 'IdList',
        'imageUuids' => 'ImageUuids',
        'scanRange' => 'ScanRange',
        'sensitiveFileKey' => 'SensitiveFileKey',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->idList)) {
            Model::validateArray($this->idList);
        }
        if (\is_array($this->scanRange)) {
            Model::validateArray($this->scanRange);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->idList) {
            if (\is_array($this->idList)) {
                $res['IdList'] = [];
                $n1 = 0;
                foreach ($this->idList as $item1) {
                    $res['IdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageUuids) {
            $res['ImageUuids'] = $this->imageUuids;
        }

        if (null !== $this->scanRange) {
            if (\is_array($this->scanRange)) {
                $res['ScanRange'] = [];
                $n1 = 0;
                foreach ($this->scanRange as $item1) {
                    $res['ScanRange'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sensitiveFileKey) {
            $res['SensitiveFileKey'] = $this->sensitiveFileKey;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdList'])) {
            if (!empty($map['IdList'])) {
                $model->idList = [];
                $n1 = 0;
                foreach ($map['IdList'] as $item1) {
                    $model->idList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageUuids'])) {
            $model->imageUuids = $map['ImageUuids'];
        }

        if (isset($map['ScanRange'])) {
            if (!empty($map['ScanRange'])) {
                $model->scanRange = [];
                $n1 = 0;
                foreach ($map['ScanRange'] as $item1) {
                    $model->scanRange[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SensitiveFileKey'])) {
            $model->sensitiveFileKey = $map['SensitiveFileKey'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
