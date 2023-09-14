<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleActions;

use AlibabaCloud\Tea\Model;

class fixedResponseConfig extends Model
{
    /**
     * @description The weight of the server group. A larger value indicates a higher weight. A server group with a higher weight receives more requests. Valid values: **1 to 100**. Default value: **100**.
     *
     * @example dssacav
     *
     * @var string
     */
    public $content;

    /**
     * @description Specifies whether to enable session persistence. Valid values:
     *
     *   **true**: enables session persistence.
     *   **false** (default): disables session persistence.
     *
     * @example text/plain
     *
     * @var string
     */
    public $contentType;

    /**
     * @description The timeout period of sessions. Unit: seconds. Valid values: **1 to 86400**.
     *
     * @example HTTP_200
     *
     * @var string
     */
    public $httpCode;
    protected $_name = [
        'content'     => 'Content',
        'contentType' => 'ContentType',
        'httpCode'    => 'HttpCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->httpCode) {
            $res['HttpCode'] = $this->httpCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fixedResponseConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['HttpCode'])) {
            $model->httpCode = $map['HttpCode'];
        }

        return $model;
    }
}
