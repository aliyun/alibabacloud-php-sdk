<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class DocumentExtractionShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example xxxxx_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $urlsShrink;
    protected $_name = [
        'agentKey'   => 'AgentKey',
        'urlsShrink' => 'Urls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->urlsShrink) {
            $res['Urls'] = $this->urlsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DocumentExtractionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['Urls'])) {
            $model->urlsShrink = $map['Urls'];
        }

        return $model;
    }
}
