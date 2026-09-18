<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\DistillationTemplate;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\DistillationTemplate\modelSlots\backends;

class modelSlots extends Model
{
    /**
     * @var backends[]
     */
    public $backends;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $required;
    protected $_name = [
        'backends' => 'Backends',
        'description' => 'Description',
        'key' => 'Key',
        'name' => 'Name',
        'required' => 'Required',
    ];

    public function validate()
    {
        if (\is_array($this->backends)) {
            Model::validateArray($this->backends);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backends) {
            if (\is_array($this->backends)) {
                $res['Backends'] = [];
                $n1 = 0;
                foreach ($this->backends as $item1) {
                    $res['Backends'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->required) {
            $res['Required'] = $this->required;
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
        if (isset($map['Backends'])) {
            if (!empty($map['Backends'])) {
                $model->backends = [];
                $n1 = 0;
                foreach ($map['Backends'] as $item1) {
                    $model->backends[$n1] = backends::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        return $model;
    }
}
