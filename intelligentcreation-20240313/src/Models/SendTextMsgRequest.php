<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class SendTextMsgRequest extends Model
{
    /**
     * @example 126000030
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 52775239-1575-5C07-A4AE-1835D120E4A6
     *
     * @var string
     */
    public $requestId;

    /**
     * @example tcm9xac9dsfbfgm8hf5k94l3cqybwh9o3mn0iuyytdgd9qoejxf1crxsdvuvr8fu0zudk5px4vsa3e3fgcclplkiuo7kyy3sqgscvhejmooblaiv64ww8cvlxvin2urzyhooqj33y7gvodef0sxn22n9q58o7xlupabiknxsv46qe7kof8nuc4be8kyhi01
     *
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $text;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'projectId' => 'projectId',
        'requestId' => 'requestId',
        'sessionId' => 'sessionId',
        'text'      => 'text',
        'type'      => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendTextMsgRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
