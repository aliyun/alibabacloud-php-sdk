<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBatchTemplateRequest\createCommand;

use AlibabaCloud\Dara\Model;

class dataSourceConfig extends Model
{
    /**
     * @var string
     */
    public $catalog;

    /**
     * @var string
     */
    public $dsId;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'catalog' => 'Catalog',
        'dsId' => 'DsId',
        'schema' => 'Schema',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalog) {
            $res['Catalog'] = $this->catalog;
        }

        if (null !== $this->dsId) {
            $res['DsId'] = $this->dsId;
        }

        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Catalog'])) {
            $model->catalog = $map['Catalog'];
        }

        if (isset($map['DsId'])) {
            $model->dsId = $map['DsId'];
        }

        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
