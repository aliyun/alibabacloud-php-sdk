<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetMCTableSchemaResponseBody;

use AlibabaCloud\Dara\Model;

class columns extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $preview;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'name' => 'Name',
        'preview' => 'Preview',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->preview)) {
            Model::validateArray($this->preview);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->preview) {
            if (\is_array($this->preview)) {
                $res['Preview'] = [];
                $n1 = 0;
                foreach ($this->preview as $item1) {
                    $res['Preview'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Preview'])) {
            if (!empty($map['Preview'])) {
                $model->preview = [];
                $n1 = 0;
                foreach ($map['Preview'] as $item1) {
                    $model->preview[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
