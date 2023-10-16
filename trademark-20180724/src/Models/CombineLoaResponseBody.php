<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class CombineLoaResponseBody extends Model
{
    /**
     * @example 166BC359-A3D8-4287-BC39-56A144A1583A
     *
     * @var string
     */
    public $requestId;

    /**
     * @example https://trademark-loa.oss-cn-beijing.aliyuncs.com/usertrademark/1219541161213057_CD0D64DFC8D37DB2658A5BEA93BF480E.jpg?Expires=1545707150&OSSAccessKeyId=hObpgEXoca42qH3V&Signature=idfmwfKdGSha9PP3IPn2KCwhycM%3D
     *
     * @var string
     */
    public $templateCombineUrl;
    protected $_name = [
        'requestId'          => 'RequestId',
        'templateCombineUrl' => 'TemplateCombineUrl',
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
        if (null !== $this->templateCombineUrl) {
            $res['TemplateCombineUrl'] = $this->templateCombineUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CombineLoaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateCombineUrl'])) {
            $model->templateCombineUrl = $map['TemplateCombineUrl'];
        }

        return $model;
    }
}
