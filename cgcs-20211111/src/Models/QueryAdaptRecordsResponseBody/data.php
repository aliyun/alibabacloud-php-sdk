<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\QueryAdaptRecordsResponseBody;

use AlibabaCloud\SDK\CGCS\V20211111\Models\QueryAdaptRecordsResponseBody\data\adaptRecords;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $adaptApplyId;

    /**
     * @var adaptRecords[]
     */
    public $adaptRecords;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $appVersionId;

    /**
     * @var string
     */
    public $appVersionName;

    /**
     * @var string
     */
    public $appVersionServiceype;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $tenantName;
    protected $_name = [
        'adaptApplyId'         => 'AdaptApplyId',
        'adaptRecords'         => 'AdaptRecords',
        'appId'                => 'AppId',
        'appName'              => 'AppName',
        'appType'              => 'AppType',
        'appVersionId'         => 'AppVersionId',
        'appVersionName'       => 'AppVersionName',
        'appVersionServiceype' => 'AppVersionServiceype',
        'tenantId'             => 'TenantId',
        'tenantName'           => 'TenantName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adaptApplyId) {
            $res['AdaptApplyId'] = $this->adaptApplyId;
        }
        if (null !== $this->adaptRecords) {
            $res['AdaptRecords'] = [];
            if (null !== $this->adaptRecords && \is_array($this->adaptRecords)) {
                $n = 0;
                foreach ($this->adaptRecords as $item) {
                    $res['AdaptRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->appVersionId) {
            $res['AppVersionId'] = $this->appVersionId;
        }
        if (null !== $this->appVersionName) {
            $res['AppVersionName'] = $this->appVersionName;
        }
        if (null !== $this->appVersionServiceype) {
            $res['AppVersionServiceype'] = $this->appVersionServiceype;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdaptApplyId'])) {
            $model->adaptApplyId = $map['AdaptApplyId'];
        }
        if (isset($map['AdaptRecords'])) {
            if (!empty($map['AdaptRecords'])) {
                $model->adaptRecords = [];
                $n                   = 0;
                foreach ($map['AdaptRecords'] as $item) {
                    $model->adaptRecords[$n++] = null !== $item ? adaptRecords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['AppVersionId'])) {
            $model->appVersionId = $map['AppVersionId'];
        }
        if (isset($map['AppVersionName'])) {
            $model->appVersionName = $map['AppVersionName'];
        }
        if (isset($map['AppVersionServiceype'])) {
            $model->appVersionServiceype = $map['AppVersionServiceype'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }

        return $model;
    }
}
