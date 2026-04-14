<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class CheckDirectSendMessageSampleRequest extends Model
{
    /**
     * @var string
     */
    public $custSpaceId;

    /**
     * @var mixed[]
     */
    public $interactive;

    /**
     * @var mixed[]
     */
    public $text;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'custSpaceId' => 'CustSpaceId',
        'interactive' => 'Interactive',
        'text' => 'Text',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->interactive)) {
            Model::validateArray($this->interactive);
        }
        if (\is_array($this->text)) {
            Model::validateArray($this->text);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }

        if (null !== $this->interactive) {
            if (\is_array($this->interactive)) {
                $res['Interactive'] = [];
                foreach ($this->interactive as $key1 => $value1) {
                    $res['Interactive'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->text) {
            if (\is_array($this->text)) {
                $res['Text'] = [];
                foreach ($this->text as $key1 => $value1) {
                    $res['Text'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }

        if (isset($map['Interactive'])) {
            if (!empty($map['Interactive'])) {
                $model->interactive = [];
                foreach ($map['Interactive'] as $key1 => $value1) {
                    $model->interactive[$key1] = $value1;
                }
            }
        }

        if (isset($map['Text'])) {
            if (!empty($map['Text'])) {
                $model->text = [];
                foreach ($map['Text'] as $key1 => $value1) {
                    $model->text[$key1] = $value1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
