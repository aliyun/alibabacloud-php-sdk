<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicResponseBody;

use AlibabaCloud\Tea\Model;

class head extends Model
{
    /**
     * @description The number of images returned.
     *
     * @example 10
     *
     * @var int
     */
    public $docsFound;

    /**
     * @description The number of images that match the search conditions on the Image Search instance.
     *
     * @example 10000
     *
     * @var int
     */
    public $docsReturn;

    /**
     * @description The time it takes to complete the search process. Unit: milliseconds.
     *
     * @example 95
     *
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
