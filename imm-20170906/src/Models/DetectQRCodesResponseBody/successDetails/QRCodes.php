<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\DetectQRCodesResponseBody\successDetails;

use AlibabaCloud\SDK\Imm\V20170906\Models\DetectQRCodesResponseBody\successDetails\QRCodes\QRCodesRectangle;
use AlibabaCloud\Tea\Model;

class QRCodes extends Model
{
    /**
     * @var QRCodesRectangle
     */
    public $QRCodesRectangle;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'QRCodesRectangle' => 'QRCodesRectangle',
        'content'          => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->QRCodesRectangle) {
            $res['QRCodesRectangle'] = null !== $this->QRCodesRectangle ? $this->QRCodesRectangle->toMap() : null;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
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
        if (isset($map['QRCodesRectangle'])) {
            $model->QRCodesRectangle = QRCodesRectangle::fromMap($map['QRCodesRectangle']);
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
