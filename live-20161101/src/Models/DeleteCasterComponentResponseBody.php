<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteCasterComponentResponseBody extends Model
{
    /**
     * @description The ID of the production studio. You can use the ID as a request parameter in the API operation that is called to query the components in the production studio, add an episode list to the production studio, or modify a component in the production studio.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf93880****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The component ID. You can use the ID as a request parameter in the API operation that is called to query the component in the production studio or modify the component in the production studio.
     *
     * @example 21926b36-7dd2-4fde-ae25-51b5bc8e****
     *
     * @var string
     */
    public $componentId;

    /**
     * @description The request ID.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'casterId' => 'CasterId',
        'componentId' => 'ComponentId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCasterComponentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['ComponentId'])) {
            $model->componentId = $map['ComponentId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
