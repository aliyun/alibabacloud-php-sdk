<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\CreateAgenticSqlExecuteCredentialResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var string
     */
    public $accessSecret;

    /**
     * @var string
     */
    public $catalogName;

    /**
     * @var string
     */
    public $catalogUuid;

    /**
     * @var string
     */
    public $databaseUuid;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $maxConnectTimes;

    /**
     * @var string
     */
    public $qualifiedName;
    protected $_name = [
        'accessKey' => 'AccessKey',
        'accessSecret' => 'AccessSecret',
        'catalogName' => 'CatalogName',
        'catalogUuid' => 'CatalogUuid',
        'databaseUuid' => 'DatabaseUuid',
        'expireTime' => 'ExpireTime',
        'maxConnectTimes' => 'MaxConnectTimes',
        'qualifiedName' => 'QualifiedName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }

        if (null !== $this->accessSecret) {
            $res['AccessSecret'] = $this->accessSecret;
        }

        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }

        if (null !== $this->catalogUuid) {
            $res['CatalogUuid'] = $this->catalogUuid;
        }

        if (null !== $this->databaseUuid) {
            $res['DatabaseUuid'] = $this->databaseUuid;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->maxConnectTimes) {
            $res['MaxConnectTimes'] = $this->maxConnectTimes;
        }

        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
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
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }

        if (isset($map['AccessSecret'])) {
            $model->accessSecret = $map['AccessSecret'];
        }

        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }

        if (isset($map['CatalogUuid'])) {
            $model->catalogUuid = $map['CatalogUuid'];
        }

        if (isset($map['DatabaseUuid'])) {
            $model->databaseUuid = $map['DatabaseUuid'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['MaxConnectTimes'])) {
            $model->maxConnectTimes = $map['MaxConnectTimes'];
        }

        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }

        return $model;
    }
}
