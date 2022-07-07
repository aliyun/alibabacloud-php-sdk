<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class PutEnableFwSwitchRequest extends Model
{
    /**
     * @var string[]
     */
    public $ipaddrList;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string[]
     */
    public $regionList;

    /**
     * @var string[]
     */
    public $resourceTypeList;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'ipaddrList'       => 'IpaddrList',
        'lang'             => 'Lang',
        'regionList'       => 'RegionList',
        'resourceTypeList' => 'ResourceTypeList',
        'sourceIp'         => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipaddrList) {
            $res['IpaddrList'] = $this->ipaddrList;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->regionList) {
            $res['RegionList'] = $this->regionList;
        }
        if (null !== $this->resourceTypeList) {
            $res['ResourceTypeList'] = $this->resourceTypeList;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['IpaddrList'])) {
            if (!empty($map['IpaddrList'])) {
                $model->ipaddrList = $map['IpaddrList'];
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
