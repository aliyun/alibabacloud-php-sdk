<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemDetailResponseBody\model;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemDetailResponseBody\model\skuPropertys\values;
use AlibabaCloud\Tea\Model;

class skuPropertys extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $text;

    /**
     * @var values[]
     */
    public $values;
    protected $_name = [
        'id'     => 'Id',
        'text'   => 'Text',
        'values' => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->values) {
            $res['Values'] = [];
            if (null !== $this->values && \is_array($this->values)) {
                $n = 0;
                foreach ($this->values as $item) {
                    $res['Values'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skuPropertys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n             = 0;
                foreach ($map['Values'] as $item) {
                    $model->values[$n++] = null !== $item ? values::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
