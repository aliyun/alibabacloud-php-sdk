<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\DetectQRCodesResponseBody;

use AlibabaCloud\SDK\Imm\V20170906\Models\DetectQRCodesResponseBody\successDetails\QRCodes;
use AlibabaCloud\Tea\Model;

class successDetails extends Model
{
    /**
     * @var QRCodes[]
     */
    public $QRCodes;

    /**
     * @var string
     */
    public $srcUri;
    protected $_name = [
        'QRCodes' => 'QRCodes',
        'srcUri'  => 'SrcUri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->QRCodes) {
            $res['QRCodes'] = [];
            if (null !== $this->QRCodes && \is_array($this->QRCodes)) {
                $n = 0;
                foreach ($this->QRCodes as $item) {
                    $res['QRCodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->srcUri) {
            $res['SrcUri'] = $this->srcUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return successDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QRCodes'])) {
            if (!empty($map['QRCodes'])) {
                $model->QRCodes = [];
                $n              = 0;
                foreach ($map['QRCodes'] as $item) {
                    $model->QRCodes[$n++] = null !== $item ? QRCodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SrcUri'])) {
            $model->srcUri = $map['SrcUri'];
        }

        return $model;
    }
}
