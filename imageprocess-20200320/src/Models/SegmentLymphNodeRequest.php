<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\SegmentLymphNodeRequest\URLList;
use AlibabaCloud\Tea\Model;

class SegmentLymphNodeRequest extends Model
{
    /**
     * @example CHEST
     *
     * @var string
     */
    public $bodyPart;

    /**
     * @example DICOM
     *
     * @var string
     */
    public $dataFormat;

    /**
     * @example 1
     *
     * @var string
     */
    public $orgId;

    /**
     * @example 1
     *
     * @var string
     */
    public $orgName;

    /**
     * @var URLList[]
     */
    public $URLList;
    protected $_name = [
        'bodyPart'   => 'BodyPart',
        'dataFormat' => 'DataFormat',
        'orgId'      => 'OrgId',
        'orgName'    => 'OrgName',
        'URLList'    => 'URLList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bodyPart) {
            $res['BodyPart'] = $this->bodyPart;
        }
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }
        if (null !== $this->URLList) {
            $res['URLList'] = [];
            if (null !== $this->URLList && \is_array($this->URLList)) {
                $n = 0;
                foreach ($this->URLList as $item) {
                    $res['URLList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SegmentLymphNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BodyPart'])) {
            $model->bodyPart = $map['BodyPart'];
        }
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
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
                $n              = 0;
                foreach ($map['URLList'] as $item) {
                    $model->URLList[$n++] = null !== $item ? URLList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
