<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDiagnosisItemsResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $billable;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $esApiRequired;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $sortOrder;

    /**
     * @var string[]
     */
    public $supportedModes;
    protected $_name = [
        'billable' => 'billable',
        'category' => 'category',
        'description' => 'description',
        'esApiRequired' => 'esApiRequired',
        'key' => 'key',
        'level' => 'level',
        'name' => 'name',
        'sortOrder' => 'sortOrder',
        'supportedModes' => 'supportedModes',
    ];

    public function validate()
    {
        if (\is_array($this->supportedModes)) {
            Model::validateArray($this->supportedModes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billable) {
            $res['billable'] = $this->billable;
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->esApiRequired) {
            $res['esApiRequired'] = $this->esApiRequired;
        }

        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->sortOrder) {
            $res['sortOrder'] = $this->sortOrder;
        }

        if (null !== $this->supportedModes) {
            if (\is_array($this->supportedModes)) {
                $res['supportedModes'] = [];
                $n1 = 0;
                foreach ($this->supportedModes as $item1) {
                    $res['supportedModes'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['billable'])) {
            $model->billable = $map['billable'];
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['esApiRequired'])) {
            $model->esApiRequired = $map['esApiRequired'];
        }

        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['sortOrder'])) {
            $model->sortOrder = $map['sortOrder'];
        }

        if (isset($map['supportedModes'])) {
            if (!empty($map['supportedModes'])) {
                $model->supportedModes = [];
                $n1 = 0;
                foreach ($map['supportedModes'] as $item1) {
                    $model->supportedModes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
