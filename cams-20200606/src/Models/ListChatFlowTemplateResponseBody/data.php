<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListChatFlowTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $response;
    protected $_name = [
        'response' => 'Response',
    ];

    public function validate()
    {
        if (\is_array($this->response)) {
            Model::validateArray($this->response);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->response) {
            if (\is_array($this->response)) {
                $res['Response'] = [];
                foreach ($this->response as $key1 => $value1) {
                    $res['Response'][$key1] = $value1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Response'])) {
            if (!empty($map['Response'])) {
                $model->response = [];
                foreach ($map['Response'] as $key1 => $value1) {
                    $model->response[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
