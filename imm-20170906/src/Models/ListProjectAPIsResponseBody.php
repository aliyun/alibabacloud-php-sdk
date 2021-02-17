<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class ListProjectAPIsResponseBody extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $APIs;
    protected $_name = [
        'project'   => 'Project',
        'requestId' => 'RequestId',
        'APIs'      => 'APIs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->APIs) {
            $res['APIs'] = $this->APIs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectAPIsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['APIs'])) {
            if (!empty($map['APIs'])) {
                $model->APIs = $map['APIs'];
            }
        }

        return $model;
    }
}
