<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunCTRegistrationRequest\floatingList;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunCTRegistrationRequest\referenceList;
use AlibabaCloud\Tea\Model;

class RunCTRegistrationRequest extends Model
{
    /**
     * @var bool
     */
    public $async;

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
    public $dataSourceType;

    /**
     * @var referenceList[]
     */
    public $referenceList;

    /**
     * @var floatingList[]
     */
    public $floatingList;
    protected $_name = [
        'async'          => 'Async',
        'dataFormat'     => 'DataFormat',
        'orgName'        => 'OrgName',
        'orgId'          => 'OrgId',
        'dataSourceType' => 'DataSourceType',
        'referenceList'  => 'ReferenceList',
        'floatingList'   => 'FloatingList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
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
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->referenceList) {
            $res['ReferenceList'] = [];
            if (null !== $this->referenceList && \is_array($this->referenceList)) {
                $n = 0;
                foreach ($this->referenceList as $item) {
                    $res['ReferenceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->floatingList) {
            $res['FloatingList'] = [];
            if (null !== $this->floatingList && \is_array($this->floatingList)) {
                $n = 0;
                foreach ($this->floatingList as $item) {
                    $res['FloatingList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunCTRegistrationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
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
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['ReferenceList'])) {
            if (!empty($map['ReferenceList'])) {
                $model->referenceList = [];
                $n                    = 0;
                foreach ($map['ReferenceList'] as $item) {
                    $model->referenceList[$n++] = null !== $item ? referenceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FloatingList'])) {
            if (!empty($map['FloatingList'])) {
                $model->floatingList = [];
                $n                   = 0;
                foreach ($map['FloatingList'] as $item) {
                    $model->floatingList[$n++] = null !== $item ? floatingList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
