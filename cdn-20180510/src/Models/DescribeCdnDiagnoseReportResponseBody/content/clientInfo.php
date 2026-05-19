<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDiagnoseReportResponseBody\content;

use AlibabaCloud\Dara\Model;

class clientInfo extends Model
{
    /**
     * @var string
     */
    public $browserInfo;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $UAString;
    protected $_name = [
        'browserInfo' => 'BrowserInfo',
        'os' => 'Os',
        'UAString' => 'UAString',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->browserInfo) {
            $res['BrowserInfo'] = $this->browserInfo;
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->UAString) {
            $res['UAString'] = $this->UAString;
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
        if (isset($map['BrowserInfo'])) {
            $model->browserInfo = $map['BrowserInfo'];
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['UAString'])) {
            $model->UAString = $map['UAString'];
        }

        return $model;
    }
}
