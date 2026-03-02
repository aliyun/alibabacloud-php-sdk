<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PbcVersionCmd extends Model
{
    /**
     * @var string
     */
    public $apiSchema;

    /**
     * @var int
     */
    public $companyId;

    /**
     * @var int
     */
    public $developerId;

    /**
     * @var string
     */
    public $document;

    /**
     * @var int
     */
    public $marketId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'apiSchema' => 'apiSchema',
        'companyId' => 'companyId',
        'developerId' => 'developerId',
        'document' => 'document',
        'marketId' => 'marketId',
        'name' => 'name',
        'schema' => 'schema',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiSchema) {
            $res['apiSchema'] = $this->apiSchema;
        }

        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->developerId) {
            $res['developerId'] = $this->developerId;
        }

        if (null !== $this->document) {
            $res['document'] = $this->document;
        }

        if (null !== $this->marketId) {
            $res['marketId'] = $this->marketId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->schema) {
            $res['schema'] = $this->schema;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['apiSchema'])) {
            $model->apiSchema = $map['apiSchema'];
        }

        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['developerId'])) {
            $model->developerId = $map['developerId'];
        }

        if (isset($map['document'])) {
            $model->document = $map['document'];
        }

        if (isset($map['marketId'])) {
            $model->marketId = $map['marketId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['schema'])) {
            $model->schema = $map['schema'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
