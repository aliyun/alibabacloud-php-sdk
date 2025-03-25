<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\SegmentOARRequest\URLList;

class SegmentOARRequest extends Model
{
    /**
     * @var string
     */
    public $bodyPart;

    /**
     * @var bool
     */
    public $contrast;

    /**
     * @var string
     */
    public $dataFormat;

    /**
     * @var int[]
     */
    public $maskList;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $orgName;

    /**
     * @var URLList[]
     */
    public $URLList;
    protected $_name = [
        'bodyPart' => 'BodyPart',
        'contrast' => 'Contrast',
        'dataFormat' => 'DataFormat',
        'maskList' => 'MaskList',
        'orgId' => 'OrgId',
        'orgName' => 'OrgName',
        'URLList' => 'URLList',
    ];

    public function validate()
    {
        if (\is_array($this->maskList)) {
            Model::validateArray($this->maskList);
        }
        if (\is_array($this->URLList)) {
            Model::validateArray($this->URLList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bodyPart) {
            $res['BodyPart'] = $this->bodyPart;
        }

        if (null !== $this->contrast) {
            $res['Contrast'] = $this->contrast;
        }

        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }

        if (null !== $this->maskList) {
            if (\is_array($this->maskList)) {
                $res['MaskList'] = [];
                $n1 = 0;
                foreach ($this->maskList as $item1) {
                    $res['MaskList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }

        if (null !== $this->URLList) {
            if (\is_array($this->URLList)) {
                $res['URLList'] = [];
                $n1 = 0;
                foreach ($this->URLList as $item1) {
                    $res['URLList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['BodyPart'])) {
            $model->bodyPart = $map['BodyPart'];
        }

        if (isset($map['Contrast'])) {
            $model->contrast = $map['Contrast'];
        }

        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }

        if (isset($map['MaskList'])) {
            if (!empty($map['MaskList'])) {
                $model->maskList = [];
                $n1 = 0;
                foreach ($map['MaskList'] as $item1) {
                    $model->maskList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }

        if (isset($map['URLList'])) {
            if (!empty($map['URLList'])) {
                $model->URLList = [];
                $n1 = 0;
                foreach ($map['URLList'] as $item1) {
                    $model->URLList[$n1++] = URLList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
