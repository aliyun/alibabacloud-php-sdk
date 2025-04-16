<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

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
        'ipaddrList' => 'IpaddrList',
        'lang' => 'Lang',
        'regionList' => 'RegionList',
        'resourceTypeList' => 'ResourceTypeList',
        'sourceIp' => 'SourceIp',
    ];

    public function validate()
    {
        if (\is_array($this->ipaddrList)) {
            Model::validateArray($this->ipaddrList);
        }
        if (\is_array($this->regionList)) {
            Model::validateArray($this->regionList);
        }
        if (\is_array($this->resourceTypeList)) {
            Model::validateArray($this->resourceTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipaddrList) {
            if (\is_array($this->ipaddrList)) {
                $res['IpaddrList'] = [];
                $n1 = 0;
                foreach ($this->ipaddrList as $item1) {
                    $res['IpaddrList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->regionList) {
            if (\is_array($this->regionList)) {
                $res['RegionList'] = [];
                $n1 = 0;
                foreach ($this->regionList as $item1) {
                    $res['RegionList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceTypeList) {
            if (\is_array($this->resourceTypeList)) {
                $res['ResourceTypeList'] = [];
                $n1 = 0;
                foreach ($this->resourceTypeList as $item1) {
                    $res['ResourceTypeList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['IpaddrList'])) {
            if (!empty($map['IpaddrList'])) {
                $model->ipaddrList = [];
                $n1 = 0;
                foreach ($map['IpaddrList'] as $item1) {
                    $model->ipaddrList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RegionList'])) {
            if (!empty($map['RegionList'])) {
                $model->regionList = [];
                $n1 = 0;
                foreach ($map['RegionList'] as $item1) {
                    $model->regionList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceTypeList'])) {
            if (!empty($map['ResourceTypeList'])) {
                $model->resourceTypeList = [];
                $n1 = 0;
                foreach ($map['ResourceTypeList'] as $item1) {
                    $model->resourceTypeList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
