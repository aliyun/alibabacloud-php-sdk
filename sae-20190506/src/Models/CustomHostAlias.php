<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CustomHostAlias extends Model
{
    /**
     * @var HostAlias[]
     */
    public $hostAliases;
    protected $_name = [
        'hostAliases' => 'hostAliases',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostAliases) {
            $res['hostAliases'] = [];
            if (null !== $this->hostAliases && \is_array($this->hostAliases)) {
                $n = 0;
                foreach ($this->hostAliases as $item) {
                    $res['hostAliases'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CustomHostAlias
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hostAliases'])) {
            if (!empty($map['hostAliases'])) {
                $model->hostAliases = [];
                $n = 0;
                foreach ($map['hostAliases'] as $item) {
                    $model->hostAliases[$n++] = null !== $item ? HostAlias::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
