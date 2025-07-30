<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetWebTerminalResponseBody extends Model
{
    /**
     * @description The request ID which is used for diagnostics and Q\\&A.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The WebSocket URI for accessing the container. You must build a WebSocket client. For more information about the communication format, see the following code:
     *
     * ws = new WebSocket(
     * `wss://xxxxx`,
     * );
     * ws.onopen = function open() {
     * console.warn(\\"connected\\");
     * term.write(\\"\\r\\");
     * };
     *
     * ws.onclose = function close() {
     * console.warn(\\"disconnected\\");
     * term.write(\\"Connection closed\\");
     * };
     *
     * // Return the following information in the backend.
     * ws.onmessage = function incoming(event) {
     * const msg = JSON.parse(event.data);
     * console.warn(msg);
     * if (msg.operation === \\"stdout\\") {
     * term.write(msg.data);
     * } else {
     * console.warn(\\"invalid msg operation: \\" + msg);
     * }
     * };
     *
     * // Enter the following code in the console.
     * term.onData(data => {
     * const msg = { operation: \\"stdin\\", data: data };
     * ws.send(JSON.stringify(msg));
     * });
     *
     * term.onResize(size => {
     * const msg = { operation: \\"resize\\", cols: size.cols, rows: size.rows };
     * ws.send(JSON.stringify(msg));
     * });
     *
     * fitAddon.fit();
     * };
     *
     * @example wss://*****
     *
     * @var string
     */
    public $webTerminalUrl;
    protected $_name = [
        'requestId' => 'RequestId',
        'webTerminalUrl' => 'WebTerminalUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->webTerminalUrl) {
            $res['WebTerminalUrl'] = $this->webTerminalUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWebTerminalResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WebTerminalUrl'])) {
            $model->webTerminalUrl = $map['WebTerminalUrl'];
        }

        return $model;
    }
}
