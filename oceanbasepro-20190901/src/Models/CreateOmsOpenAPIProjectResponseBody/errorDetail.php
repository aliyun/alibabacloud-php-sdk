<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateOmsOpenAPIProjectResponseBody;

use AlibabaCloud\Tea\Model;

class errorDetail extends Model
{
    /**
     * @example CM-RESOAT111111
     *
     * @var string
     */
    public $code;

    /**
     * @example WARN
     *
     * @var string
     */
    public $level;

    /**
     * @example A system error occurred.
     *
     * @var string
     */
    public $message;

    /**
     * @example Contact the administrator.
     *
     * @var string
     */
    public $proposal;
    protected $_name = [
        'code'     => 'Code',
        'level'    => 'Level',
        'message'  => 'Message',
        'proposal' => 'Proposal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->proposal) {
            $res['Proposal'] = $this->proposal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Proposal'])) {
            $model->proposal = $map['Proposal'];
        }

        return $model;
    }
}
