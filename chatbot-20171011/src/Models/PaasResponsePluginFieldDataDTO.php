<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PaasResponsePluginFieldDataDTO extends Model
{
    /**
     * @description ContentResponse
     *
     * @var PaasResponseNodeContentDTO
     */
    public $contentResponse;

    /**
     * @description Name
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'contentResponse' => 'ContentResponse',
        'name'            => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentResponse) {
            $res['ContentResponse'] = null !== $this->contentResponse ? $this->contentResponse->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['ContentResponse'])) {
            $model->contentResponse = PaasResponseNodeContentDTO::fromMap($map['ContentResponse']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
