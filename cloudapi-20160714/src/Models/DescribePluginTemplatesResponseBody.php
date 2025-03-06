<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginTemplatesResponseBody\templates;
use AlibabaCloud\Tea\Model;

class DescribePluginTemplatesResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example EF924FE4-2EDD-4CD3-89EC-34E4708574E7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The templates.
     *
     * @var templates
     */
    public $templates;
    protected $_name = [
        'requestId' => 'RequestId',
        'templates' => 'Templates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->templates) {
            $res['Templates'] = null !== $this->templates ? $this->templates->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePluginTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Templates'])) {
            $model->templates = templates::fromMap($map['Templates']);
        }

        return $model;
    }
}
