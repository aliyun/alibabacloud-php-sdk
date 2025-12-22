<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppResponseBody\result;

use AlibabaCloud\Dara\Model;

class queryProcessors extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string[]
     */
    public $indexes;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[][]
     */
    public $processors;
    protected $_name = [
        'active' => 'active',
        'category' => 'category',
        'domain' => 'domain',
        'indexes' => 'indexes',
        'name' => 'name',
        'processors' => 'processors',
    ];

    public function validate()
    {
        if (\is_array($this->indexes)) {
            Model::validateArray($this->indexes);
        }
        if (\is_array($this->processors)) {
            Model::validateArray($this->processors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->indexes) {
            if (\is_array($this->indexes)) {
                $res['indexes'] = [];
                $n1 = 0;
                foreach ($this->indexes as $item1) {
                    $res['indexes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->processors) {
            if (\is_array($this->processors)) {
                $res['processors'] = [];
                $n1 = 0;
                foreach ($this->processors as $item1) {
                    if (\is_array($item1)) {
                        $res['processors'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['processors'][$n1][$key2] = $value2;
                        }
                    }
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
        if (isset($map['active'])) {
            $model->active = $map['active'];
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['indexes'])) {
            if (!empty($map['indexes'])) {
                $model->indexes = [];
                $n1 = 0;
                foreach ($map['indexes'] as $item1) {
                    $model->indexes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['processors'])) {
            if (!empty($map['processors'])) {
                $model->processors = [];
                $n1 = 0;
                foreach ($map['processors'] as $item1) {
                    if (!empty($item1)) {
                        $model->processors[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->processors[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
