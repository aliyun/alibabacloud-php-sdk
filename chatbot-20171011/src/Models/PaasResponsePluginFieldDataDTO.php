<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PaasResponsePluginFieldDataDTO extends Model
{
    /**
     * @description Name
     *
     * @var string
     */
    public $name;

    /**
     * @description ContentResponse
     *
     * @var PaasResponseNodeContentDTO
     */
    public $contentResponse;
    protected $_name = [
        'name'            => 'Name',
        'contentResponse' => 'ContentResponse',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->contentResponse) {
            $res['ContentResponse'] = null !== $this->contentResponse ? $this->contentResponse->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PaasResponsePluginFieldDataDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ContentResponse'])) {
            $model->contentResponse = PaasResponseNodeContentDTO::fromMap($map['ContentResponse']);
        }

        return $model;
    }
}
