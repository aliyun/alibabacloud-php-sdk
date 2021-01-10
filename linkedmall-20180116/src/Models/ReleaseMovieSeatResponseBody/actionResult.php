<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ReleaseMovieSeatResponseBody;

use AlibabaCloud\Tea\Model;

class actionResult extends Model
{
    /**
     * @var string
     */
    public $returnCode;

    /**
     * @var string
     */
    public $returnValue;

    /**
     * @var string
     */
    public $returnMessage;
    protected $_name = [
        'returnCode'    => 'ReturnCode',
        'returnValue'   => 'ReturnValue',
        'returnMessage' => 'ReturnMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->returnCode) {
            $res['ReturnCode'] = $this->returnCode;
        }
        if (null !== $this->returnValue) {
            $res['ReturnValue'] = $this->returnValue;
        }
        if (null !== $this->returnMessage) {
            $res['ReturnMessage'] = $this->returnMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actionResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReturnCode'])) {
            $model->returnCode = $map['ReturnCode'];
        }
        if (isset($map['ReturnValue'])) {
            $model->returnValue = $map['ReturnValue'];
        }
        if (isset($map['ReturnMessage'])) {
            $model->returnMessage = $map['ReturnMessage'];
        }

        return $model;
    }
}
