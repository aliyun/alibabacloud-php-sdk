<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\DetectQRCodesResponseBody\successDetails;

use AlibabaCloud\SDK\Imm\V20170906\Models\DetectQRCodesResponseBody\successDetails\QRCodes\QRCodesRectangle;
use AlibabaCloud\Tea\Model;

class QRCodes extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var QRCodesRectangle
     */
    public $QRCodesRectangle;
    protected $_name = [
        'content'          => 'Content',
        'QRCodesRectangle' => 'QRCodesRectangle',
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
        if (null !== $this->QRCodesRectangle) {
            $res['QRCodesRectangle'] = null !== $this->QRCodesRectangle ? $this->QRCodesRectangle->toMap() : null;
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
        if (isset($map['QRCodesRectangle'])) {
            $model->QRCodesRectangle = QRCodesRectangle::fromMap($map['QRCodesRectangle']);
        }

        return $model;
    }
}
