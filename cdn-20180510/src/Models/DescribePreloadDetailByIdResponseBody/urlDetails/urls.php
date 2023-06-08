<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribePreloadDetailByIdResponseBody\urlDetails;

use AlibabaCloud\Tea\Model;

class urls extends Model
{
    /**
     * @description The details of resource prefetch.
     *
     *   If the resource is prefetched on all POPs, "Successfully preloaded" is returned.
     *   If the resource fails to be prefetched on some POPs, the failure details separated by vertical bars (|) are returned.
     *
     * @example Successfully preloaded
     *
     * @var string
     */
    public $description;

    /**
     * @description The success percentage, which indicates the number of POPs on which the resource is prefetched.
     *
     * @example 47%
     *
     * @var string
     */
    public $success;

    /**
     * @description The URL of the prefetched resource.
     *
     * @example /abc.jpg
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'description' => 'Description',
        'success'     => 'Success',
        'url'         => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return urls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
