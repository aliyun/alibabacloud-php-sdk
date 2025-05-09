<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class DLDatabase extends Model
{
    /**
     * @var string
     */
    public $catalogName;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $parameters;
    protected $_name = [
        'catalogName' => 'CatalogName',
        'dbId' => 'DbId',
        'description' => 'Description',
        'location' => 'Location',
        'name' => 'Name',
        'parameters' => 'Parameters',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }

        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['Parameters'][$key1] = $value1;
                }
            }
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
        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }

        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                foreach ($map['Parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
