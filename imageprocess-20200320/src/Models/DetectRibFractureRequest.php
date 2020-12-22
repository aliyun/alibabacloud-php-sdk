<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectRibFractureRequest\URLList;
use AlibabaCloud\Tea\Model;

class DetectRibFractureRequest extends Model
{
    /**
     * @var URLList[]
     */
    public $URLList;

    /**
     * @var string
     */
    public $dataFormat;

    /**
     * @var string
     */
    public $orgName;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'URLList'    => 'URLList',
        'dataFormat' => 'DataFormat',
        'orgName'    => 'OrgName',
        'orgId'      => 'OrgId',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        Model::validateRequired('URLList', $this->URLList, true);
        Model::validateRequired('dataFormat', $this->dataFormat, true);
        Model::validateRequired('orgName', $this->orgName, true);
        Model::validateRequired('orgId', $this->orgId, true);
        Model::validateRequired('sourceType', $this->sourceType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->URLList) {
            $res['URLList'] = [];
            if (null !== $this->URLList && \is_array($this->URLList)) {
                $n = 0;
                foreach ($this->URLList as $item) {
                    $res['URLList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectRibFractureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['URLList'])) {
            if (!empty($map['URLList'])) {
                $model->URLList = [];
                $n              = 0;
                foreach ($map['URLList'] as $item) {
                    $model->URLList[$n++] = null !== $item ? URLList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
