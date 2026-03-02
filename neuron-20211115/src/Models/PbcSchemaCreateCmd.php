<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PbcSchemaCreateCmd extends Model
{
    /**
     * @var int
     */
    public $companyId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $marketId;

    /**
     * @var string
     */
    public $pbcName;

    /**
     * @var string
     */
    public $pbcVersion;

    /**
     * @var string
     */
    public $schema;
    protected $_name = [
        'companyId' => 'companyId',
        'id' => 'id',
        'marketId' => 'marketId',
        'pbcName' => 'pbcName',
        'pbcVersion' => 'pbcVersion',
        'schema' => 'schema',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->marketId) {
            $res['marketId'] = $this->marketId;
        }

        if (null !== $this->pbcName) {
            $res['pbcName'] = $this->pbcName;
        }

        if (null !== $this->pbcVersion) {
            $res['pbcVersion'] = $this->pbcVersion;
        }

        if (null !== $this->schema) {
            $res['schema'] = $this->schema;
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
        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['marketId'])) {
            $model->marketId = $map['marketId'];
        }

        if (isset($map['pbcName'])) {
            $model->pbcName = $map['pbcName'];
        }

        if (isset($map['pbcVersion'])) {
            $model->pbcVersion = $map['pbcVersion'];
        }

        if (isset($map['schema'])) {
            $model->schema = $map['schema'];
        }

        return $model;
    }
}
