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
    public $returnMessage;

    /**
     * @var string
     */
    public $returnValue;
    protected $_name = [
        'returnCode'    => 'ReturnCode',
        'returnMessage' => 'ReturnMessage',
        'returnValue'   => 'ReturnValue',
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
        if (null !== $this->returnMessage) {
            $res['ReturnMessage'] = $this->returnMessage;
        }
        if (null !== $this->returnValue) {
            $res['ReturnValue'] = $this->returnValue;
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
        if (isset($map['ReturnMessage'])) {
            $model->returnMessage = $map['ReturnMessage'];
        }
        if (isset($map['ReturnValue'])) {
            $model->returnValue = $map['ReturnValue'];
        }

        return $model;
    }
}
