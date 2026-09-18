<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models\GetScannerTaskResultHtmlUrlResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $scannerTaskResultHtmlDownloadUrl;
    protected $_name = [
        'scannerTaskResultHtmlDownloadUrl' => 'ScannerTaskResultHtmlDownloadUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scannerTaskResultHtmlDownloadUrl) {
            $res['ScannerTaskResultHtmlDownloadUrl'] = $this->scannerTaskResultHtmlDownloadUrl;
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
        if (isset($map['ScannerTaskResultHtmlDownloadUrl'])) {
            $model->scannerTaskResultHtmlDownloadUrl = $map['ScannerTaskResultHtmlDownloadUrl'];
        }

        return $model;
    }
}
