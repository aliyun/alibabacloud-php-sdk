<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class ListVirtualMFADevicesRequest extends Model
{
    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request.``
     *
     * When you call the operation for the first time, if the total number of returned entries exceeds the value of `MaxItems`, the entries are truncated. The system returns entries based on the value of `MaxItems` and does not return the excess entries. In this case, the value of the response parameter `IsTruncated` is `true`, and `Marker` is returned. In the next call, you can use the value of `Marker` and maintain the settings of the other request parameters to query the excess entries. You can repeat the call until the value of the `IsTruncated` parameter becomes `false`. This way, all entries are returned.
     * @example EXAMPLE
     *
     * @var string
     */
    public $marker;

    /**
     * @description The number of entries per page.
     *
     * Default value: 100.
     * @example 100
     *
     * @var int
     */
    public $maxItems;
    protected $_name = [
        'marker'   => 'Marker',
        'maxItems' => 'MaxItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->maxItems) {
            $res['MaxItems'] = $this->maxItems;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVirtualMFADevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['MaxItems'])) {
            $model->maxItems = $map['MaxItems'];
        }

        return $model;
    }
}
