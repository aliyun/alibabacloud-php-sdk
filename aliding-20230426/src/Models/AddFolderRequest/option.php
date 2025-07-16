<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\AddFolderRequest;

use AlibabaCloud\SDK\Aliding\V20230426\Models\AddFolderRequest\option\appProperties;
use AlibabaCloud\Tea\Model;

class option extends Model
{
    /**
     * @var appProperties[]
     */
    public $appProperties;

    /**
     * @example AUTO_RENAME
     *
     * @var string
     */
    public $conflictStrategy;
    protected $_name = [
        'appProperties' => 'AppProperties',
        'conflictStrategy' => 'ConflictStrategy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appProperties) {
            $res['AppProperties'] = [];
            if (null !== $this->appProperties && \is_array($this->appProperties)) {
                $n = 0;
                foreach ($this->appProperties as $item) {
                    $res['AppProperties'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->conflictStrategy) {
            $res['ConflictStrategy'] = $this->conflictStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return option
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppProperties'])) {
            if (!empty($map['AppProperties'])) {
                $model->appProperties = [];
                $n = 0;
                foreach ($map['AppProperties'] as $item) {
                    $model->appProperties[$n++] = null !== $item ? appProperties::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ConflictStrategy'])) {
            $model->conflictStrategy = $map['ConflictStrategy'];
        }

        return $model;
    }
}
