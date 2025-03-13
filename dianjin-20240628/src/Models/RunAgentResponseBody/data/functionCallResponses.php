<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RunAgentResponseBody\data;

use AlibabaCloud\Tea\Model;

class functionCallResponses extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @example 2025-01-21 16:37:14
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $functionArgs;

    /**
     * @example web_search
     *
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $result;

    /**
     * @example 2025-01-21 16:37:14
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'displayName' => 'displayName',
        'endTime' => 'endTime',
        'functionArgs' => 'functionArgs',
        'functionName' => 'functionName',
        'result' => 'result',
        'startTime' => 'startTime',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->functionArgs) {
            $res['functionArgs'] = $this->functionArgs;
        }
        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return functionCallResponses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['functionArgs'])) {
            $model->functionArgs = $map['functionArgs'];
        }
        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
