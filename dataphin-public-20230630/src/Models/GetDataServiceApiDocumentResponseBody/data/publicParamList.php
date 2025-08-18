<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiDocumentResponseBody\data;

use AlibabaCloud\Dara\Model;

class publicParamList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $isRequired;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sample;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'isRequired' => 'IsRequired',
        'name' => 'Name',
        'sample' => 'Sample',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->isRequired) {
            $res['IsRequired'] = $this->isRequired;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->sample) {
            $res['Sample'] = $this->sample;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['IsRequired'])) {
            $model->isRequired = $map['IsRequired'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Sample'])) {
            $model->sample = $map['Sample'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
