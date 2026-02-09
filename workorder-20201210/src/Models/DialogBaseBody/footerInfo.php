<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20201210\Models\DialogBaseBody;

use AlibabaCloud\Dara\Model;

class footerInfo extends Model
{
    /**
     * @var mixed[]
     */
    public $ext;

    /**
     * @var string
     */
    public $schema;
    protected $_name = [
        'ext' => 'Ext',
        'schema' => 'Schema',
    ];

    public function validate()
    {
        if (\is_array($this->ext)) {
            Model::validateArray($this->ext);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ext) {
            if (\is_array($this->ext)) {
                $res['Ext'] = [];
                foreach ($this->ext as $key1 => $value1) {
                    $res['Ext'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
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
        if (isset($map['Ext'])) {
            if (!empty($map['Ext'])) {
                $model->ext = [];
                foreach ($map['Ext'] as $key1 => $value1) {
                    $model->ext[$key1] = $value1;
                }
            }
        }

        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        return $model;
    }
}
