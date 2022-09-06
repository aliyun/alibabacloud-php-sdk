<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateDownloadDataJobResponseBody\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDownloadDataJobResponseBody\data\querySetting\astExpr;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDownloadDataJobResponseBody\data\querySetting\selectedHeaders;
use AlibabaCloud\Tea\Model;

class querySetting extends Model
{
    /**
     * @var astExpr[]
     */
    public $astExpr;

    /**
     * @var selectedHeaders[]
     */
    public $selectedHeaders;
    protected $_name = [
        'astExpr'         => 'AstExpr',
        'selectedHeaders' => 'SelectedHeaders',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->astExpr) {
            $res['AstExpr'] = [];
            if (null !== $this->astExpr && \is_array($this->astExpr)) {
                $n = 0;
                foreach ($this->astExpr as $item) {
                    $res['AstExpr'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->selectedHeaders) {
            $res['SelectedHeaders'] = [];
            if (null !== $this->selectedHeaders && \is_array($this->selectedHeaders)) {
                $n = 0;
                foreach ($this->selectedHeaders as $item) {
                    $res['SelectedHeaders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return querySetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AstExpr'])) {
            if (!empty($map['AstExpr'])) {
                $model->astExpr = [];
                $n              = 0;
                foreach ($map['AstExpr'] as $item) {
                    $model->astExpr[$n++] = null !== $item ? astExpr::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SelectedHeaders'])) {
            if (!empty($map['SelectedHeaders'])) {
                $model->selectedHeaders = [];
                $n                      = 0;
                foreach ($map['SelectedHeaders'] as $item) {
                    $model->selectedHeaders[$n++] = null !== $item ? selectedHeaders::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
