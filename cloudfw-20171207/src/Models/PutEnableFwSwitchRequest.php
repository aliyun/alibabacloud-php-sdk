<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class PutEnableFwSwitchRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string[]
     */
    public $ipaddrList;

    /**
     * @var string[]
     */
    public $regionList;

    /**
     * @var string[]
     */
    public $resourceTypeList;
    protected $_name = [
        'sourceIp'         => 'SourceIp',
        'lang'             => 'Lang',
        'ipaddrList'       => 'IpaddrList',
        'regionList'       => 'RegionList',
        'resourceTypeList' => 'ResourceTypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->ipaddrList) {
            $res['IpaddrList'] = $this->ipaddrList;
        }
        if (null !== $this->regionList) {
            $res['RegionList'] = $this->regionList;
        }
        if (null !== $this->resourceTypeList) {
            $res['ResourceTypeList'] = $this->resourceTypeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutEnableFwSwitchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['IpaddrList'])) {
            if (!empty($map['IpaddrList'])) {
                $model->ipaddrList = $map['IpaddrList'];
            }
        }
        if (isset($map['RegionList'])) {
            if (!empty($map['RegionList'])) {
                $model->regionList = $map['RegionList'];
            }
        }
        if (isset($map['ResourceTypeList'])) {
            if (!empty($map['ResourceTypeList'])) {
                $model->resourceTypeList = $map['ResourceTypeList'];
            }
        }

        return $model;
    }
}
