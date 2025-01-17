<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class SetImageSensitiveFileStatusShrinkRequest extends Model
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
     * @var string
     */
    public $scanRangeShrink;
    /**
     * @var string
     */
    public $sensitiveFileKey;
    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'idList'           => 'IdList',
        'imageUuids'       => 'ImageUuids',
        'scanRangeShrink'  => 'ScanRange',
        'sensitiveFileKey' => 'SensitiveFileKey',
        'status'           => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->idList)) {
            Model::validateArray($this->idList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->idList) {
            if (\is_array($this->idList)) {
                $res['IdList'] = [];
                $n1            = 0;
                foreach ($this->idList as $item1) {
                    $res['IdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->imageUuids) {
            $res['ImageUuids'] = $this->imageUuids;
        }

        if (null !== $this->scanRangeShrink) {
            $res['ScanRange'] = $this->scanRangeShrink;
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
                $n1            = 0;
                foreach ($map['IdList'] as $item1) {
                    $model->idList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ImageUuids'])) {
            $model->imageUuids = $map['ImageUuids'];
        }

        if (isset($map['ScanRange'])) {
            $model->scanRangeShrink = $map['ScanRange'];
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
