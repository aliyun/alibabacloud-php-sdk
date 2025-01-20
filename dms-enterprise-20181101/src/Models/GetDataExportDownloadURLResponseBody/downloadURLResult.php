<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportDownloadURLResponseBody;

use AlibabaCloud\Dara\Model;

class downloadURLResult extends Model
{
    /**
     * @var bool
     */
    public $hasResult;
    /**
     * @var string
     */
    public $tipMessage;
    /**
     * @var string
     */
    public $URL;
    protected $_name = [
        'hasResult'  => 'HasResult',
        'tipMessage' => 'TipMessage',
        'URL'        => 'URL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasResult) {
            $res['HasResult'] = $this->hasResult;
        }

        if (null !== $this->tipMessage) {
            $res['TipMessage'] = $this->tipMessage;
        }

        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
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
        if (isset($map['HasResult'])) {
            $model->hasResult = $map['HasResult'];
        }

        if (isset($map['TipMessage'])) {
            $model->tipMessage = $map['TipMessage'];
        }

        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }

        return $model;
    }
}
