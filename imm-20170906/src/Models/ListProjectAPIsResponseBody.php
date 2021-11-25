<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class ListProjectAPIsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $APIs;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'APIs'      => 'APIs',
        'project'   => 'Project',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->APIs) {
            $res['APIs'] = $this->APIs;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['APIs'])) {
            if (!empty($map['APIs'])) {
                $model->APIs = $map['APIs'];
            }
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
