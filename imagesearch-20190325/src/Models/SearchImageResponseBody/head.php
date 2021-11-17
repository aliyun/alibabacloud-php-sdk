<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20190325\Models\SearchImageResponseBody;

use AlibabaCloud\Tea\Model;

class head extends Model
{
    /**
     * @var int
     */
    public $docsFound;

    /**
     * @var int
     */
    public $docsReturn;

    /**
     * @var int
     */
    public $searchTime;
    protected $_name = [
        'docsFound'  => 'DocsFound',
        'docsReturn' => 'DocsReturn',
        'searchTime' => 'SearchTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docsFound) {
            $res['DocsFound'] = $this->docsFound;
        }
        if (null !== $this->docsReturn) {
            $res['DocsReturn'] = $this->docsReturn;
        }
        if (null !== $this->searchTime) {
            $res['SearchTime'] = $this->searchTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return head
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocsFound'])) {
            $model->docsFound = $map['DocsFound'];
        }
        if (isset($map['DocsReturn'])) {
            $model->docsReturn = $map['DocsReturn'];
        }
        if (isset($map['SearchTime'])) {
            $model->searchTime = $map['SearchTime'];
        }

        return $model;
    }
}
