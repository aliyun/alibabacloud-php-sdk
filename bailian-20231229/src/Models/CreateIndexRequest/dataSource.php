<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\CreateIndexRequest;

use AlibabaCloud\Tea\Model;

class dataSource extends Model
{
    /**
     * @var string
     */
    public $credentialId;

    /**
     * @var string
     */
    public $credentialKey;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var bool
     */
    public $isPrivateLink;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $subPath;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $table;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'credentialId'  => 'CredentialId',
        'credentialKey' => 'CredentialKey',
        'database'      => 'Database',
        'endpoint'      => 'Endpoint',
        'isPrivateLink' => 'IsPrivateLink',
        'region'        => 'Region',
        'subPath'       => 'SubPath',
        'subType'       => 'SubType',
        'table'         => 'Table',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credentialId) {
            $res['CredentialId'] = $this->credentialId;
        }
        if (null !== $this->credentialKey) {
            $res['CredentialKey'] = $this->credentialKey;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->isPrivateLink) {
            $res['IsPrivateLink'] = $this->isPrivateLink;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->subPath) {
            $res['SubPath'] = $this->subPath;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->table) {
            $res['Table'] = $this->table;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialId'])) {
            $model->credentialId = $map['CredentialId'];
        }
        if (isset($map['CredentialKey'])) {
            $model->credentialKey = $map['CredentialKey'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['IsPrivateLink'])) {
            $model->isPrivateLink = $map['IsPrivateLink'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SubPath'])) {
            $model->subPath = $map['SubPath'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
