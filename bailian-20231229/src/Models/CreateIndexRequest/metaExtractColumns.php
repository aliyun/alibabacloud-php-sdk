<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\CreateIndexRequest;

use AlibabaCloud\Tea\Model;

class metaExtractColumns extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var bool
     */
    public $enableLlm;

    /**
     * @var bool
     */
    public $enableSearch;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'desc'         => 'Desc',
        'enableLlm'    => 'EnableLlm',
        'enableSearch' => 'EnableSearch',
        'key'          => 'Key',
        'type'         => 'Type',
        'value'        => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->enableLlm) {
            $res['EnableLlm'] = $this->enableLlm;
        }
        if (null !== $this->enableSearch) {
            $res['EnableSearch'] = $this->enableSearch;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metaExtractColumns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['EnableLlm'])) {
            $model->enableLlm = $map['EnableLlm'];
        }
        if (isset($map['EnableSearch'])) {
            $model->enableSearch = $map['EnableSearch'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
