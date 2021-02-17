<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageQRCodesResponseBody;

use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageQRCodesResponseBody\QRCodes\QRCodeBoundary;
use AlibabaCloud\Tea\Model;

class QRCodes extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var QRCodeBoundary
     */
    public $QRCodeBoundary;
    protected $_name = [
        'content'        => 'Content',
        'QRCodeBoundary' => 'QRCodeBoundary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->QRCodeBoundary) {
            $res['QRCodeBoundary'] = null !== $this->QRCodeBoundary ? $this->QRCodeBoundary->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QRCodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['QRCodeBoundary'])) {
            $model->QRCodeBoundary = QRCodeBoundary::fromMap($map['QRCodeBoundary']);
        }

        return $model;
    }
}
