<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicListResponseBody\data;
use AlibabaCloud\Tea\Model;

class OnsTopicListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var data[]
     */
    public $data;

    /**
     * @var string
     */
    public $helpUrl;
    protected $_name = [
        'requestId' => 'RequestId',
        'data'      => 'Data',
        'helpUrl'   => 'HelpUrl',
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
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->helpUrl) {
            $res['HelpUrl'] = $this->helpUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsTopicListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HelpUrl'])) {
            $model->helpUrl = $map['HelpUrl'];
        }

        return $model;
    }
}
