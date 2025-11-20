<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class ListCredentialsRequest extends Model
{
    /**
     * @var string
     */
    public $credentialAuthType;

    /**
     * @var string
     */
    public $credentialName;

    /**
     * @var string
     */
    public $credentialSourceType;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $provider;
    protected $_name = [
        'credentialAuthType' => 'credentialAuthType',
        'credentialName' => 'credentialName',
        'credentialSourceType' => 'credentialSourceType',
        'enabled' => 'enabled',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'provider' => 'provider',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialAuthType) {
            $res['credentialAuthType'] = $this->credentialAuthType;
        }

        if (null !== $this->credentialName) {
            $res['credentialName'] = $this->credentialName;
        }

        if (null !== $this->credentialSourceType) {
            $res['credentialSourceType'] = $this->credentialSourceType;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
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
        if (isset($map['credentialAuthType'])) {
            $model->credentialAuthType = $map['credentialAuthType'];
        }

        if (isset($map['credentialName'])) {
            $model->credentialName = $map['credentialName'];
        }

        if (isset($map['credentialSourceType'])) {
            $model->credentialSourceType = $map['credentialSourceType'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        return $model;
    }
}
