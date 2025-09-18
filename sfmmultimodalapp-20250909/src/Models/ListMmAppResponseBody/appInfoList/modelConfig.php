<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\ListMmAppResponseBody\appInfoList;

use AlibabaCloud\Dara\Model;

class modelConfig extends Model
{
    /**
     * @var string
     */
    public $historyLimit;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var bool
     */
    public $openWebSearch;

    /**
     * @var string
     */
    public $textModal;
    protected $_name = [
        'historyLimit' => 'HistoryLimit',
        'modelType' => 'ModelType',
        'openWebSearch' => 'OpenWebSearch',
        'textModal' => 'TextModal',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->historyLimit) {
            $res['HistoryLimit'] = $this->historyLimit;
        }

        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }

        if (null !== $this->openWebSearch) {
            $res['OpenWebSearch'] = $this->openWebSearch;
        }

        if (null !== $this->textModal) {
            $res['TextModal'] = $this->textModal;
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
        if (isset($map['HistoryLimit'])) {
            $model->historyLimit = $map['HistoryLimit'];
        }

        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }

        if (isset($map['OpenWebSearch'])) {
            $model->openWebSearch = $map['OpenWebSearch'];
        }

        if (isset($map['TextModal'])) {
            $model->textModal = $map['TextModal'];
        }

        return $model;
    }
}
