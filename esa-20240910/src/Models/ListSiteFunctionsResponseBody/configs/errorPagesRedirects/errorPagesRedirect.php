<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\errorPagesRedirects;

use AlibabaCloud\Dara\Model;

class errorPagesRedirect extends Model
{
    /**
     * @var string
     */
    public $statusCode;

    /**
     * @var string
     */
    public $targetURL;
    protected $_name = [
        'statusCode' => 'StatusCode',
        'targetURL' => 'TargetURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        if (null !== $this->targetURL) {
            $res['TargetURL'] = $this->targetURL;
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
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        if (isset($map['TargetURL'])) {
            $model->targetURL = $map['TargetURL'];
        }

        return $model;
    }
}
