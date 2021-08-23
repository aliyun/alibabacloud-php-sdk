<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class UsersayMtopDTO extends Model
{
    /**
     * @description Id
     *
     * @var string
     */
    public $id;

    /**
     * @description Data
     *
     * @var SectionMtopDTO[]
     */
    public $data;

    /**
     * @description Strict
     *
     * @var bool
     */
    public $strict;
    protected $_name = [
        'id'     => 'Id',
        'data'   => 'Data',
        'strict' => 'Strict',
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
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->strict) {
            $res['Strict'] = $this->strict;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UsersayMtopDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? SectionMtopDTO::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Strict'])) {
            $model->strict = $map['Strict'];
        }

        return $model;
    }
}
