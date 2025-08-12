<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditNotifyConfigResponseBody\liveAudioAuditNotifyConfigList;

use AlibabaCloud\Dara\Model;

class liveAudioAuditNotifyConfig extends Model
{
    /**
     * @var string
     */
    public $callback;

    /**
     * @var string
     */
    public $callbackTemplate;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'callback' => 'Callback',
        'callbackTemplate' => 'CallbackTemplate',
        'domainName' => 'DomainName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }

        if (null !== $this->callbackTemplate) {
            $res['CallbackTemplate'] = $this->callbackTemplate;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }

        if (isset($map['CallbackTemplate'])) {
            $model->callbackTemplate = $map['CallbackTemplate'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
