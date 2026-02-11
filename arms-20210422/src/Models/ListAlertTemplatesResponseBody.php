<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListAlertTemplatesResponseBody\alertTemplates;

class ListAlertTemplatesResponseBody extends Model
{
    /**
     * @var alertTemplates[]
     */
    public $alertTemplates;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alertTemplates' => 'AlertTemplates',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->alertTemplates)) {
            Model::validateArray($this->alertTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertTemplates) {
            if (\is_array($this->alertTemplates)) {
                $res['AlertTemplates'] = [];
                $n1 = 0;
                foreach ($this->alertTemplates as $item1) {
                    $res['AlertTemplates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AlertTemplates'])) {
            if (!empty($map['AlertTemplates'])) {
                $model->alertTemplates = [];
                $n1 = 0;
                foreach ($map['AlertTemplates'] as $item1) {
                    $model->alertTemplates[$n1] = alertTemplates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
